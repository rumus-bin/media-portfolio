<template>
  <file-pond name="media" @processfile="handleFileUpload"></file-pond>
</template>

<script>
import { defineComponent } from 'vue';
import vueFilePond, { setOptions } from 'vue-filepond';

// Import FilePond styles
import 'filepond/dist/filepond.min.css';

export default defineComponent({
  components: {
    FilePond: vueFilePond(),
  },
  methods: {
    handleFileUpload(error, file) {
      if (!error) {
        // Handle successful upload
      }
    },
  },
});
</script>
