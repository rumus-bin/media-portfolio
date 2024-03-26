<template>
  <div class="relative bg-emerald-600 md:pt-32 pb-32 pt-12">

  </div>
  <div class="px-4 md:px-10 mx-auto w-full -m-24">

    <div>
      <div class="flex flex-wrap">
        <CardTable :settings="tableSettings"/>
      </div>
    </div>
    <footer-admin/>
  </div>
</template>
<script>
import CardTable from "@/Components/AdminDashboard/Cards/CardTable.vue";
import CardSettings from "@/Components/AdminDashboard/Cards/CardSettings.vue";
import FooterAdmin from "@/Components/AdminDashboard/Footers/FooterAdmin.vue";
import Button from "@/Components/Inertia/Button.vue";
// import CardProfile from "@/Components/AdminDashboard/Cards/CardProfile.vue";

// send http get request to /pages endpoint
// get all pages

const getPages = function (event) {
  let pages = []

  axios({
    method: "get",
    url: "/api/pages",
  })
      .then((response) => {
        tableSettings.items = response.data;
        console.log(response.data);
      })
      .catch((error) => {
        console.log(error);
      });

  return pages;
}

const tableSettings = {
  title: "Pages",
  headers: [
    // {text: "ID", align: "left", sortable: true, value: "id"},
    {text: "Title", value: "title"},
    {text: "Slug", value: "slug"},
    // {text: "Created At", value: "created_at"},
    // {text: "Updated At", value: "updated_at"},
    {text: "Date created", value: "date_created"},
  ],
  items: [],
};


export default {
  components: {
    Button,
    FooterAdmin,
    CardSettings,
    CardTable,
    // CardProfile,
  },
  data() {
    return {
      tableSettings,
    };
  },
  methods: {
    getPages,
  },
  setup() {
  },
  mounted() {
    getPages();
  }
};
</script>
