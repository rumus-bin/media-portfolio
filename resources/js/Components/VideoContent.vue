<!-- File: src/components/VideoContent.vue -->
<template>
  <div>
    <!-- Admin Mode -->
    <div v-if="isAdmin">
      <div>
        <video v-if="videoPreview" controls :src="videoPreview"></video>
        <input type="file" @change="onFileChange" accept="video/*" />
        <input v-model="content.caption" placeholder="Video Caption" />
      </div>
    </div>

    <!-- Public Mode -->
    <div v-else>
      <video controls :src="content.url"></video>
      <p v-if="content.caption">{{ content.caption }}</p>
    </div>
  </div>
</template>

<script>
import { ref, defineComponent } from 'vue';

export default defineComponent({
  name: 'VideoContent',
  props: {
    content: {
      type: Object,
      required: true,
    },
    isAdmin: {
      type: Boolean,
      default: false,
    },
  },
  setup(props) {
    const videoPreview = ref(props.content.url || null);
    const content = ref(props.content);

    const onFileChange = (event) => {
      const file = event.target.files[0];
      if (file) {
        // Create a preview
        videoPreview.value = URL.createObjectURL(file);

        // Handle file upload here
        // For example, upload the file via API and update content.url
        // Then, emit an event or make an API call to save the updated content
      }
    };

    return {
      videoPreview,
      content,
      onFileChange,
    };
  },
});
</script>

<style scoped>
video {
  max-width: 100%;
  height: auto;
}
</style>
