<template>
  <div>
    <form autocomplete="off" @submit.prevent="submitForm">
      <div class="autocomplete" style="width:100%;">
        <input
          id="myInput"
          class="input-search"
          type="text"
          name="search"
          placeholder="Search"
          @keyup="getProductIndex"
          v-model="form.search"
          @focus="focus = true"
          @blur="focus = false"
        />
        <div id="myInputautocomplete-list" class="autocomplete-items" v-show="focus">
          <div v-for="search in searches" :key="search.id">
            <a :href="`/search?search=${search.name}`">
              <strong>{{ search.name }}</strong>
            </a>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
export default {
  props: ["search"],
  data() {
    return {
      focus: false,
      searches: [],
      form: {
        search: ""
      }
    };
  },
  methods: {
    getProductIndex() {
      axios.post("/search", this.form).then(response => {
        this.searches = response.data.results.data;
      });
    },
    submitForm() {
      window.location.href = `/search?search=${this.searches[0].name}`;
    }
  }
};
</script>

<style>
/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

.input-search {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

.input-search {
  background-color: #f1f1f1;
  width: 100%;
}

.input-search[type="submit"] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9;
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important;
  color: #ffffff;
}
</style>
