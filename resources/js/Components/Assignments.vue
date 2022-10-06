<template>
    <section class="space-y-6">
        <AssignmentsList :assignments="filters.active" title="Active assignments"></AssignmentsList>
        <AssignmentsList :assignments="filters.completed" title="Completed assignments"></AssignmentsList>
    </section>
</template>

<script>
import AssignmentsList from "@/Components/AssignmentsList.vue";
export default {
    name: "Assignments",
    components: {
      AssignmentsList
    },
    data () {
        return {
            assignments: [
                {id: 1, name: 'First assignments', completed: false},
                {id: 2, name: 'Second assignments', completed: false},
                {id: 3, name: 'Third assignments', completed: false}
            ]
        }
    },
    computed: {
        filters () {
            return {
                active: this.assignments.filter((assignment) => {return !assignment.completed}),
                completed: this.assignments.filter((assignment) => {return assignment.completed})
            }
        }
    }
}
</script>

<style scoped>

</style>
