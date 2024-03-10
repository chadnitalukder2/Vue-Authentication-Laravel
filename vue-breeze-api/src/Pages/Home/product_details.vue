<script setup>
import '@fortawesome/fontawesome-free/css/all.css';

</script>

<template>
<div>
    <div class="container">
        <div class="row">
            <div class="product_img">
                <a href="" ><img src="../../assets/img/pexels-sunil-patel-599708.jpg" /></a>
            </div>
            <div class="product_details">
                <h3>Nike Free RN 2019 iD</h3>
                <div class="rating ">
                    <p class="text_left">
                        <a href="#" >5.0</a>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </p>
                    <p class="text_middle mr-4">
                        <a href="#"  style="color: #000; text-decoration: none;">100 <span style="color: #bbb">Rating</span></a>
                    </p>
                    <p class="text_right">
                        <a href="#" style="color: #000;text-decoration: none;">500 <span style="color: #bbb">Sold</span></a>
                    </p>
                </div>
                <p class="price" ><span>$120.00</span></p>
                <p style="color:#bbb ; font-size: 18px; line-height: 22px;">
                    A small river named Duden flows by their place and supplies it
                    with the necessary regelialia. It is a paradisematic country, in
                    which roasted parts of sentences fly into your mouth.
                </p>
                <p style="color:#bbb ;    font-size: 18px; line-height: 22px;">
                    On her way she met a copy. The copy warned the Little Blind Text,
                    that where it came from it would have been rewritten a thousand
                    times and everything that was left from its origin would be the
                    word "and" and the Little Blind Text should turn around and return
                    to its own, safe country. But nothing the copy said could convince
                    her and so it didn’t take long until a few insidious Copy Writers
                    ambushed her, made her drunk with Longe and Parole and dragged her
                    into their agency, where they abused her for their.
                </p>

                <div class=" mt-4">
                    <div class="select-size">
                        <select name="" id="" class="form-control">
                            <option value="">Small</option>
                            <option value="">Medium</option>
                            <option value="">Large</option>
                            <option value="">Extra Large</option>
                        </select>
                    </div>
                        
                    <div class="input_group">
                        <button type="button"> <i class="fa-solid fa-minus"></i> </button>
                        <input type="text" id="quantity" name="quantity" value="1" min="1" max="100" />
                        <button type="button" style="margin-left: 10px;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    
                    <div class="col-md-12">
                        <p style="color: #000;font-size: 18px;">80 piece available</p>
                    </div>
                </div>
                <p style="margin-top: 35px;">
                    <a class="cart_btn">Add to Cart</a>
                    <a class="buy_btn">Buy now</a>
                </p>
            </div>
        </div>

        <div class="heading">
            <div style="flex-basis: 33%;">
                <h3 class="mb-4"> Description </h3>
            </div>
            <div style="flex-basis: 33%;">
                <h3 class="mb-4">Manufactured </h3>
            </div>
            <div style="flex-basis: 33%;">
                <h3 class="mb-4"> Reviews</h3>
            </div>
        </div>
        <div class="details">
            <h3 class="mb-4">Nike Free RN 2019 iD</h3>
            <p>
                On her way she met a copy. The copy warned the Little Blind
                Text, that where it came from it would have been rewritten a
                thousand times and everything that was left from its origin
                would be the word "and" and the Little Blind Text should
                turn around and return to its own, safe country. But nothing
                the copy said could convince her and so it didn’t take long
                until a few insidious Copy Writers ambushed her, made her
                drunk with Longe and Parole and dragged her into their
                agency, where they abused her for their.
            </p>
        </div>
        <div class="details">
            <h3 class="mb-4">Manufactured By Nike</h3>
                        <p>
                            On her way she met a copy. The copy warned the Little Blind
                            Text, that where it came from it would have been rewritten a
                            thousand times and everything that was left from its origin
                            would be the word "and" and the Little Blind Text should
                            turn around and return to its own, safe country. But nothing
                            the copy said could convince her and so it didn’t take long
                            until a few insidious Copy Writers ambushed her, made her
                            drunk with Longe and Parole and dragged her into their
                            agency, where they abused her for their.
                        </p>
        </div>
        <div class="details">
            <h3 class="mb-4">23 Reviews</h3>
            <p>
                When she reached the first hills of the Italic
                Mountains, she had a last view back on the skyline of
                her hometown Bookmarksgrov
            </p>
        </div>
                      
                   
                           
                                
    </div>
</div>

</template>

<style lang="scss" scoped>
.container{
    padding: 80px;
}

.row {
    display: flex;
    gap: 50px;
    .product_img{
        flex-basis: 50%;
        img{
            width: 100%;
            height: 100%;
        }
    }
    .product_details{
        flex-basis: 60%;
        flex-wrap: wrap;
        padding: 10px;
        h3{
            font-size: 30px;
            font-weight: 400;
            margin: 0px;
        }

        .rating{
            display: flex;
            gap:20px;
            .text_left{
                a{
                    color: #dbcc8f;
                    text-decoration: none;
                    padding-right: 10px;
                    font-size: 18px;
                }
                i{
                    color: #dbcc8f;
                    font-size: 14px;
                    padding: 2px;
                }
            }
        }
        .price{
            font-size: 30px;
            color: #000000;
            margin: 0px;
              padding: 20px 0px;
        }
    }
   
}

.select-size{
    select{
        font-size: 13px;
        width: 25%;
        text-align: center;
        padding: 10px;
        letter-spacing: 2px;
        color: #000000;
        text-transform: uppercase;
        border:1px solid rgba(0, 0, 0, 0.1);
        margin: 20px 0px;
    }
}
.input_group{
    button{
        padding: 8px 10px;
        font-size: 13px;
        background: transparent;
        border:1px solid rgba(0, 0, 0, 0.1);
        margin-right:10px ;
        padding: 10px;
        color: #000000;
    }
    input{
        font-size: 16px;
        text-align: center;
        border:1px solid rgba(0, 0, 0, 0.1);
        width: 20%;
        color: #000000;
        padding: 8px;
    }
}
.cart_btn{
    background: #000000;
    border: 1px solid #000000;
    color: #fff;
    padding: 15px 40px;
    font-size: 16px;
    border-radius: 31px;
    text-decoration: none;
    margin-right: 15px;
    cursor: pointer;
    &:hover{
        transition: all 0.2s ease;
        background:#D1EAE4;
        border: 1px solid #D1EAE4;
        color: #000000;
        transform: 0.3;
    }
}
.buy_btn{
    cursor: pointer;
    background:#D1EAE4;
    border: 1px solid #D1EAE4;
    color: #000000;
    padding: 15px 50px;
    font-size: 16px;
    border-radius: 31px;
    text-decoration: none;
    &:hover{
        background: #fff;
        color: #000000;
        transition: all 0.2s ease;
    }
}
.heading{
    display: flex;
    justify-content: space-between;
    padding-top: 50px;
    gap: 20px;
    h3{
        background: #ede3e3;
        padding: 35px;
        text-align: center;
        font-size: 28px;
        border: 1px solid transparent;
        background: rgba(0, 0, 0, 0.05);
        &:hover{
            background:#D1EAE4 ;
            transition: all 0.2s ease;
        }
    }
}
.details{
    padding: 20px;
    background: #ededed4f;
    margin-bottom: 20px;
    h3{
        font-size: 1.75rem;
        line-height: 1.5;
        font-weight: 400;
        color: #000000;
        margin-bottom: 1.5rem ;
    }
    p{
        font-size: 15px;
        line-height: 1.8;
        font-weight: 400;
        color: gray;
    }
}

</style>
