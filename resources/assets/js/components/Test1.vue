<template>
    <!-- -->
    <ul>
    Test, UL
    <li v-for="(item, i) in list" :key="item">{{ item }}
      <button @click="list.splice(i, 1)">remove</button>
    </li>

    </ul>
</template>

<!-- -->
<script>
    export default {
        data: function(){
            return { list: ['Apple', 'Banana', 'Strawberry'] };
        },
        methods: {
            addItem: function() {
                this.list.push('Orange' );
            }
        },                
    }
</script>


