<!-- File: src/components/TextContent.vue -->
<template>
  <div>
    <!-- Admin Mode -->
    <div v-if="isAdmin">
      <ckeditor :editor="editor" v-model="content.text" @change="updateContent"></ckeditor>
    </div>

    <!-- Public Mode -->
    <div v-else v-html="content.text"></div>
  </div>
</template>

<script>
import { ref, defineComponent } from 'vue';
import { CKEditor } from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default defineComponent({
  name: 'TextContent',
  components: {
    ckeditor: CKEditor.component,
  },
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
    const editor = ClassicEditor;
    const content = ref(props.content);

    const updateContent = () => {
      // Emit an event or make an API call to save the updated content
      // For example:
      // emit('update-content', content.value);
    };

    return {
      editor,
      content,
      updateContent,
    };
  },
});
</script>

<style scoped>
/* Add any styles specific to this component */
</style>
