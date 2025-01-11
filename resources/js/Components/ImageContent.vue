<!-- File: src/components/ImageContent.vue -->
<template>
  <div>
    <!-- Admin Mode -->
    <div v-if="isAdmin">
      <div>
        <img :src="imagePreview" alt="Image Preview" v-if="imagePreview" />
        <input type="file" @change="onFileChange" />
      </div>
    </div>

    <!-- Public Mode -->
    <div v-else>
      <img :src="content.url" :alt="content.altText || 'Image Content'}" />
      <p v-if="content.description">{{ content.description }}</p>
    </div>
  </div>
</template>

<script>
import { ref, defineComponent } from 'vue';

export default defineComponent({
  name: 'ImageContent',
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
    const imagePreview = ref(props.content.url || null);
    const content = ref(props.content);

    const onFileChange = (event) => {
      const file = event.target.files[0];
      if (file) {
        // Create a preview
        imagePreview.value = URL.createObjectURL(file);

        // Handle file upload here
        // For example, upload the file via API and update content.url
        // Then, emit an event or make an API call to save the updated content
      }
    };

    return {
      imagePreview,
      content,
      onFileChange,
    };
  },
});
</script>

<style scoped>
img {
  max-width: 100%;
  height: auto;
}
</style>
