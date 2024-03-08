
<script setup>

</script>

<template>
 <!-- #fdebcb -->
 <div class="pt_header">
    <div class="section-header">
        <div class="left">
            <img src="../assets/img/slider-1.webp">
        </div>
        <div class="right">
            <h1>Welcome To OurGift Shop</h1>
            <p>Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non necessitatibus error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse, possimus maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.</p>
            <button>CONTACT US</button>
        </div>
    </div>

</div>

</template>

<style lang="scss" scoped>
.pt_header{
    .left{
        img{
            width: 99%;
            height: 80vh;
            position: absolute;
        }
    }
    .right{
        position: absolute;
        width: 50%;
        height: 80vh;
        padding:20px 132px 65px 70px;
        text-align: left;
        clip-path: polygon(0 0, 71% 0, 100% 155vh, 0 106%);
        background:  linear-gradient(105deg, rgb(239 234 234 / 48%) 0%, rgba(255, 255, 255, 0.9) 50%);
        h1{
            font-size: 62px;
            color: rgb(162 111 163 / 88%);
        }
        p{
            font-size: 20px;
            padding: 0px 30px 26px 0px;
            color: #777;
        }
        button{
            padding: 15px;
            font-size: 20px;
            background: rgba(162, 111, 163, 0.88);
            border: 1px solid #ddd;
            border-radius: 6px;
            color: #3c3737;

        }
        
    }

}


</style>