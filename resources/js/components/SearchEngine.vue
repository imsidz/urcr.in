<template>
  <div>
    <form action="/search" method="GET">
      <input
        type="text"
        name="search"
        id
        class="form-control"
        :value="search"
        @focus="focus = true"
        @blur="focus = false"
        @keyup="getProductIndex"
      />
    </form>
  </div>
</template>
<script>
export default {
  props: ["search"],
  data() {
    return {
      focus: false
    };
  },
  methods: {
    getProductIndex() {
      console.log("triggered");
    }
  }
};
</script>
