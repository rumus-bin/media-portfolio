<template>
  <draggable v-model="components" @end="onEnd">
    <div v-for="component in components" :key="component.id">
      <!-- Render component preview -->
    </div>
  </draggable>
</template>

<script>
import draggable from 'vuedraggable';

export default {
  components: {
    draggable,
  },
  data() {
    return {
      components: [],
    };
  },
  methods: {
    onEnd() {
      // Update component order
    },
  },
};
</script>
