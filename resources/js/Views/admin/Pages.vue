<template>
  <div class="relative bg-emerald-600 md:pt-32 pb-32 pt-12">
  </div>
  <div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
      <div class="w-full lg:w-8/12 px-4">
        <CardSettings/>
      </div>
      <div class="w-full lg:w-4/12 px-4">
        <!--      <CardProfile/>-->
      </div>
      <div class="flex flex-wrap"></div>
    </div>
  </div>
</template>
<script>
import CardSettings from "@/Components/AdminDashboard/Cards/CardSettings.vue";
// import CardProfile from "@/Components/AdminDashboard/Cards/CardProfile.vue";

export default {
  components: {
    CardSettings,
    // CardProfile,
  },
};
</script>
