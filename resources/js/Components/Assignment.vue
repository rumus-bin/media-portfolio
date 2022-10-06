<template>
    <li>
        <label>
            {{assignment.name}}
            <input type="checkbox" v-model="assignment.completed">
        </label>
    </li>
</template>

<script>
export default {
    name: "Assignment",
    props: {
        assignment: Object
    }
}
</script>

<style scoped>

</style>
