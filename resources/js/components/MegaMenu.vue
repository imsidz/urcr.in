<template>
    <nav class="navbar" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button
                    type="button"
                    class="navbar-toggle"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
                class="collapse navbar-collapse"
                id="bs-example-navbar-collapse-1"
            >
                <ul class="nav navbar-nav">
                    <li v-for="(cat, index) in data" :key="index">
                        <a
                            :href="`/cat/${cat.slug}`"
                            @mouseover="hoverInCat(index)"
                            @mouseleave="hoverOutCat(index)"
                            style="text-transform:capitalize;"
                            >{{ cat.name }}</a
                        >
                    </li>
                </ul>
            </div>
            <div
                v-for="(category, catindex) in data"
                :key="catindex"
                @mouseover="hoverInCat(catindex)"
                @mouseleave="hoverOutCat(catindex)"
                class="container"
            >
                <div
                    class="panel panel-category shadow"
                    v-show="category.active == true"
                >
                    <div class="panel-body panel-body-category h-100">
                        <div class="row">
                            <div class="col-md-2 nopadding">
                                <h5>
                                    <a :href="`/cat/${category.slug}`"
                                        >All {{ category.name }}</a
                                    >
                                </h5>
                                <div
                                    v-for="(subcat,
                                    subcatindex) in category.subcategories"
                                    :key="subcatindex"
                                    @mouseover="
                                        hoverInSubCat(catindex, subcatindex)
                                    "
                                    @mouseleave="
                                        hoverOutSubCat(catindex, subcatindex)
                                    "
                                    class="subcategories"
                                >
                                    <a
                                        :href="
                                            `/cat/${category.slug}/${subcat.slug}`
                                        "
                                    >
                                        {{ subcat.name }}
                                        <span class="pull-right">></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-10 nopadding">
                                <div class="row">
                                    <div
                                        v-for="(subcat,
                                        subcatindex) in category.subcategories"
                                        :key="subcatindex"
                                        @mouseover="
                                            hoverInSubCat(catindex, subcatindex)
                                        "
                                        @mouseleave="
                                            hoverOutSubCat(
                                                catindex,
                                                subcatindex
                                            )
                                        "
                                        v-show="subcat.active == true"
                                        class="subcategory"
                                    >
                                        <div class="w-100 h-100">
                                            <div
                                                class="col-md-3 nopadding"
                                                v-for="(childcat,
                                                childcatindex) in subcat.childcategories"
                                                :key="childcatindex"
                                            >
                                                <div class="childcategory">
                                                    <a
                                                        :href="
                                                            `/cat/${category.slug}/${subcat.slug}/${childcat.slug}`
                                                        "
                                                        style="text-transform:capitalize; font-weight:bold;"
                                                        >{{ childcat.name }}</a
                                                    >
                                                    <hr width="90%" />
                                                    <p
                                                        v-for="(subchild,
                                                        subchildindex) in childcat.subchildcategories"
                                                        :key="subchildindex"
                                                        style="text-transform:capitalize;text-align: left;"
                                                    >
                                                        <a
                                                            :href="
                                                                `/cat/${category.slug}/${subcat.slug}/${childcat.slug}/${subchild.slug}`
                                                            "
                                                            >{{
                                                                subchild.name
                                                            }}</a
                                                        >
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</template>

<script>
export default {
    data() {
        return {
            data: []
        };
    },
    mounted() {
        this.getMegaMenuData();
    },

    methods: {
        getMegaMenuData() {
            axios.get("/api/get-mega-menu-data").then(response => {
                this.data = response.data.data;
            });
        },
        hoverInCat(index) {
            this.data[index].active = true;
        },
        hoverOutCat(index) {
            this.data[index].active = false;
        },
        hoverInSubCat(cat, sub) {
            this.data[cat].subcategories[sub].active = true;
        },
        hoverOutSubCat(cat, sub) {
            this.data[cat].subcategories[sub].active = false;
        }
    }
};
</script>

<style>
.w-100 {
    width: 80%;
}
.navbar-nav {
    width: 100%;
    text-align: left;
}
.navbar-nav li {
    float: none;
    display: inline-block;
}
.subcategories {
    background-color: rgb(253, 253, 253);
    text-align: left;
    cursor: pointer;
    padding: 10px 10px 10px 20px;
    font-size: 15px;
    font-weight: bold;
    text-transform: capitalize;
}
.subcategories:hover {
    background-color: rgb(236, 236, 236);
}
.childcategory {
    text-align: left;
}
.h-100 {
    min-height: 250px;
}
.nopadding {
    padding: 0 !important;
    margin: 0 !important;
}

.panel-body-category {
    padding: 0px 15px;
}
.subcategory {
    padding: 15px 40px;
}
.shadow {
    box-shadow: 0px 7px 17px #25252540;
}
</style>
