<script>

export default {
    props:['news'],
    data(){
        return {
            $newsdata:this.news
        }
    },


    methods:{
        goprops(){
        this.$emit('newsmethod',this.goprops);
        }
    },
    mounted() {
        this.goprops();
    }


}
</script>
<template>
    <div class="w-3/4 mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl  dark:text-gray-400">
        <h1>Новости компании</h1>

        <div class="flex flex-wrap">
            <div class="flex-col " v-for="item in news" :key="item.id" >
                <h1> {{ item.title }}</h1>
                <p> {{ item.content}}</p>

            </div>
        </div>
    </div>
</template>
