<template>
    <div>
        <div class="container">
            <h1>Store</h1>
            <div class="heading">
                <div class="filter">
                    <div class="custom-select" style="width:200px;">
                        <select>
                            <option value="0">Select car:</option>
                            <option value="1">Audi</option>
                            <option value="2">BMW</option>
                            <option value="3">Citroen</option>
                            <option value="4">Ford</option>
                            <option value="5">Honda</option>
                            <option value="6">Jaguar</option>
                            <option value="7">Land Rover</option>
                            <option value="8">Mercedes</option>
                            <option value="9">Mini</option>
                            
                        </select>
                    </div>
            </div>
            <div class="sort"></div>
                <div class="custom-select" style="width:200px;">
                    <select>
                        <option value="0">Select car:</option>
                        <option value="1">Audi</option>
                        <option value="2">BMW</option>
                        <option value="3">Citroen</option>
                        <option value="4">Ford</option>
                        <option value="5">Honda</option>
                        <option value="6">Jaguar</option>
                        <option value="7">Land Rover</option>
                        <option value="8">Mercedes</option>
                        <option value="9">Mini</option>
                        
                    </select>
                </div>
            </div>
            <div class="product_card">

            </div>

        </div>
    </div>
  
</template>

<style lang="scss" scoped>
.container{
    width: 88% !important;
    background: plum;
    padding: 50px 80px;
    text-align: center;
    .heading{
        display: flex;
        justify-content: space-between;
    }
}

</style>