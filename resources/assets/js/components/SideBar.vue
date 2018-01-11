<template>
    <div class="col-md-12 dashboard">
            <aside class="col-md-1">
                <ul class="nav nav-img nav-pills nav-stacked">
                    <li role="presentation">
                        <a class="btn center yellow" href="#" data-toggle="tooltip" data-placement="left" title="Foods">
                            <img class="img-rounded" src="/images/food.png" />
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="btn center blue" href="#" data-toggle="tooltip" data-placement="left" title="Food Stalls">
                            <img class="img-rounded" src="/images/resto.png" />
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="btn center green" data-toggle="tooltip" data-placement="left" title="Recipes">
                            <img class="img-rounded" src="/images/recipe.png" />
                        </a>
                    </li>
                </ul>
            </aside>
            <section class="col-md-11">
                <slot></slot>
            </section>  
        </div>
</template>