<template>
<div>
    <ul class="alert" v-for="(value, index) in validationErrors" :key="index">
        <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
        {{ value }}
    </ul>
</div>
</template>

<script>
export default {
    name: "validation-errors",
    props: ['errors'],
    computed: {
        validationErrors() {
            let errors = Object.values(this.errors)
            errors = errors.flat()

            return errors;
        }
    }
}
</script>

<style scoped>

</style>
