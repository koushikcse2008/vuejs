<template>
    <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Met Title</h2>
    Vue meta example. Check title.
</template>

<script>
export default {
    name: "MetaTitle",
    data() {
        return {
            //declare variable
            userData: {},
        }        
    },
    created () {
        const metaInfo = this.metaInfo();
        document.title = metaInfo.title;

    },
    methods: {
        metaInfo() {
            return { 
                title: "New page title from the api or something."
            }
        }
    }
}
</script>
