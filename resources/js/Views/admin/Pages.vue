<template>
  <div class="relative bg-emerald-600 md:pt-32 pb-32 pt-12">
  </div>
  <div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div>
      <div class="flex flex-wrap">
        <CardSettings/>
      </div>
    </div>
    <footer-admin/>
  </div>
</template>
<script>
import CardSettings from "@/Components/AdminDashboard/Cards/CardSettings.vue";
import FooterAdmin from "@/Components/AdminDashboard/Footers/FooterAdmin.vue";
// import CardProfile from "@/Components/AdminDashboard/Cards/CardProfile.vue";

export default {
  components: {
    FooterAdmin,
    CardSettings,
    // CardProfile,
  },
};
</script>
