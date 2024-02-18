<template>
  <header-stats/>
  <div class="px-4 md:px-10 mx-auto w-full -m-24">

    <div class="flex flex-wrap">
      <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
        <card-line-chart/>
      </div>
      <div class="w-full xl:w-4/12 px-4">
        <card-bar-chart/>
      </div>
    </div>
    <div class="flex flex-wrap mt-4">
      <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
        <card-page-visits/>
      </div>
      <div class="w-full xl:w-4/12 px-4">
        <card-social-traffic/>
      </div>
    </div>
  </div>
</template>
<script>
import CardLineChart from "@/Components/AdminDashboard/Cards/CardLineChart.vue";
import CardBarChart from "@/Components/AdminDashboard/Cards/CardBarChart.vue";
import CardPageVisits from "@/Components/AdminDashboard/Cards/CardPageVisits.vue";
import CardSocialTraffic from "@/Components/AdminDashboard/Cards/CardSocialTraffic.vue";
import HeaderStats from "@/Components/AdminDashboard/Headers/HeaderStats.vue";

export default {
  name: "dashboard-page",
  components: {
    HeaderStats,
    CardLineChart,
    CardBarChart,
    CardPageVisits,
    CardSocialTraffic,
  },
};
</script>
