<template>
  <ckeditor :editor="editor" v-model="content"></ckeditor>
</template>

<script>
import { CKEditor } from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
  components: {
    ckeditor: CKEditor.component,
  },
  data() {
    return {
      editor: ClassicEditor,
      content: '',
    };
  },
};
</script>
