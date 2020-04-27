<template>
    <form @submit.prevent="submitForm">
        <div class="form-group">
            <label for="title">Name</label>
            <input
                type="text"
                name="name"
                id="title"
                class="form-control"
                placeholder="Name"
                aria-describedby="titl"
                v-model="form.name"
            />
        </div>

        <div class="form-group">
            <label>Select Category</label>
            <select
                name="category"
                class="form-control"
                v-model="form.category"
                @change="selectCategory"
            >
                <option
                    :value="category.id"
                    v-for="category in categories"
                    :key="category.id"
                    >{{ category.name }}</option
                >
            </select>
        </div>

        <div class="form-group">
            <label>Select SubCategory</label>
            <select
                name="subcategory"
                class="form-control"
                v-model="form.subcategory"
                @change="selectSubCategory"
            >
                <option
                    :value="sub.id"
                    v-for="sub in subcategories"
                    :key="sub.id"
                    >{{ sub.name }}</option
                >
            </select>
        </div>

        <div class="form-group">
            <label>Select Child Category</label>
            <select
                name="subcategory"
                class="form-control"
                v-model="form.child"
                @change="selectChildCategory"
            >
                <option
                    :value="child.id"
                    v-for="child in childcategories"
                    :key="child.id"
                    >{{ child.name }}</option
                >
            </select>
        </div>

        <!-- <div class="form-group">
      <label>Select Sub Child Category</label>
      <select
        name="subcategory"
        class="form-control"
        v-model="form.child"
        @change="selectChildCategory"
      >
        <option :value="child.id" v-for="child in childcategories" :key="child.id">{{ child.name }}</option>
      </select>
    </div>-->

        <div class="form-group">
            <label for>Select Image</label>
            <vue-dropzone
                ref="myVueDropzone"
                id="dropzone"
                :options="dropzoneOptions"
            ></vue-dropzone>
        </div>
        <button
            type="submit"
            class="btn btn-primary"
            @click.prevent="submitForm"
        >
            Submit
        </button>
    </form>
</template>

<script>
import Swal from "sweetalert2";
import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";
export default {
    components: {
        vueDropzone: vue2Dropzone
    },
    data() {
        return {
            categories: [],
            subcategories: [],
            childcategories: [],
            subchildcategories: [],

            form: {
                name: "",
                category: "",
                subcategory: "",
                child: "",
                subchild: ""
            },
            dropzoneOptions: {
                url: `/api/sub-child-category/image-upload`,
                thumbnailWidth: 150,
                maxFilesize: 2,
                headers: { "My-Awesome-Header": "header value" },
                params: {
                    subchild: ""
                }
            }
        };
    },
    mounted() {
        this.getCategory();
        this.createSubChildCategory();
    },
    methods: {
        getCategory() {
            axios.get("/admin/get-catgories").then(response => {
                this.categories = response.data;
            });
        },
        createSubChildCategory() {
            axios.get("/admin/create-sub-child-category").then(response => {
                this.form.subchild = response.data.id;
                this.dropzoneOptions.params.subchild = response.data.id;
            });
        },
        selectCategory() {
            axios
                .post("/admin/get-subcategory", {
                    categoryid: this.form.category
                })
                .then(response => {
                    this.subcategories = response.data;
                });
        },
        selectSubCategory() {
            axios
                .post("/admin/get-childcategory", {
                    subid: this.form.subcategory
                })
                .then(response => {
                    this.childcategories = response.data;
                });
        },
        selectChildCategory() {
            axios
                .post("/admin/get-subchildcategory", {
                    childid: this.form.child
                })
                .then(response => {
                    this.subchildcategories = response.data;
                });
        },
        submitForm() {
            axios
                .post("/admin/subchildcategory/create", this.form)
                .then(response => {
                    Swal.fire({
                        title: "Hurrey",
                        text: "Child Category Created",
                        icon: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Okay"
                    }).then(result => {
                        window.location.href = "/admin/subchildcategory";
                    });
                });
        }
    }
};
</script>
