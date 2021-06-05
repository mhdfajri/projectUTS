<?php include"../model/data.php"; 
$db = new data();
?>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<link rel="stylesheet" href="a.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
<script src=""></script>
<body style="background-color: white;">
    <?php include "navbar.php"; ?>
    
        <div id="app" class="container">
            <?php 
    foreach ($db->viewdatafilm() as $a) {
        ?>
            <a href="viewfilm.php?film=<?php echo $a['title']?>">
                <card data-image="../asset/img/<?php echo $a['image'];?>">
                    <h2 slot="header"><?php echo $a['title'];?></h2>
                    <p slot="content"><?php echo $a['sinopsis'];?></p>
                </card>
            </a>

            <?php
    } ?>
        </div>

    


</body>
<script>
    Vue.config.devtools = true;

    Vue.component('card', {
        template: `
    <div class="card-wrap"
      @mousemove="handleMouseMove"
      @mouseenter="handleMouseEnter"
      @mouseleave="handleMouseLeave"
      ref="card">
      <div class="card"
        :style="cardStyle">
        <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
        <div class="card-info">
          <slot name="header"></slot>
          <slot name="content"></slot>
        </div>
      </div>
    </div>`,
        mounted() {
            this.width = this.$refs.card.offsetWidth;
            this.height = this.$refs.card.offsetHeight;
        },
        props: ['dataImage'],
        data: () => ({
            width: 0,
            height: 0,
            mouseX: 0,
            mouseY: 0,
            mouseLeaveDelay: null
        }),
        computed: {
            mousePX() {
                return this.mouseX / this.width;
            },
            mousePY() {
                return this.mouseY / this.height;
            },
            cardStyle() {
                const rX = this.mousePX * 30;
                const rY = this.mousePY * -30;
                return {
                    transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
                };
            },
            cardBgTransform() {
                const tX = this.mousePX * -40;
                const tY = this.mousePY * -40;
                return {
                    transform: `translateX(${tX}px) translateY(${tY}px)`
                }
            },
            cardBgImage() {
                return {
                    backgroundImage: `url(${this.dataImage})`
                }
            }
        },
        methods: {
            handleMouseMove(e) {
                this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
                this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
            },
            handleMouseEnter() {
                clearTimeout(this.mouseLeaveDelay);
            },
            handleMouseLeave() {
                this.mouseLeaveDelay = setTimeout(() => {
                    this.mouseX = 0;
                    this.mouseY = 0;
                }, 1000);
            }
        }
    });

    const app = new Vue({
        el: '#app'
    });
</script>