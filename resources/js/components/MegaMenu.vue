<template>
  <nav class="navbar" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
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
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li v-for="(cat, index) in data" :key="index">
            <a
              href="#"
              @mouseover="hoverInCat(index)"
              @mouseleave="hoverOutCat(index)"
            >{{ cat.name }}</a>
          </li>
        </ul>
      </div>
      <div
        v-for="(category, catindex) in data"
        :key="catindex"
        @mouseover="hoverInCat(catindex)"
        @mouseleave="hoverOutCat(catindex)"
      >
        <div class="panel" v-show="category.active == true">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3">
                <div
                  v-for="(subcat, subcatindex) in category.subcategories"
                  :key="subcatindex"
                  @mouseover="hoverInSubCat(catindex, subcatindex)"
                  @mouseleave="hoverOutSubCat(catindex, subcatindex)"
                  class="subcategories"
                >{{ subcat.name }}</div>
              </div>
              <div class="col-md-9">
                <div class="row">
                  <div v-for="(subcat, subcatindex) in category.subcategories" :key="subcatindex">
                    <div
                      class="col-md-3"
                      v-for="(childcat, childcatindex) in subcat.childcategories"
                      :key="childcatindex"
                      v-show="subcat.active == true"
                    >
                      <div class="childcategory">
                        <a href="#">{{ childcat.name }}</a>
                        <p
                          v-for="(subchild, subchildindex) in childcat.subchildcategories"
                          :key="subchildindex"
                        >{{ subchild.name }}</p>
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
  width: 90%;
}
.navbar-nav {
  width: 100%;
  text-align: center;
}
.navbar-nav li {
  float: none;
  display: inline-block;
}
.subcategories {
  text-align: left;
  cursor: pointer;
}
.childcategory {
  text-align: left;
}
</style>
