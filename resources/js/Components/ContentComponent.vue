<template>
  <component :is="getComponent(content.type)" :content="content"></component>
</template>

<script>
import TextContent from './TextContent.vue';
import ImageContent from './ImageContent.vue';
import VideoContent from './VideoContent.vue';

export default {
  props: ['content'],
  components: {
    TextContent,
    ImageContent,
    VideoContent,
  },
  methods: {
    getComponent(type) {
      switch (type) {
        case 'text':
          return 'TextContent';
        case 'image':
          return 'ImageContent';
        case 'video':
          return 'VideoContent';
        default:
          return 'div';
      }
    },
  },
};
</script>
