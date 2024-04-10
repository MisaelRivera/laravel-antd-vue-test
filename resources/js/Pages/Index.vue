<script setup>
import axios from 'axios';
import { ref, h } from 'vue';
import { Link } from '@inertiajs/vue3';
import Unauthorized from '../Components/Shared/Navbars/Unauthorized.vue';
const props = defineProps({
        title: String,
        ordersProp: {
            type: Object,
            default: {},
        },
        pageProp: {
            type: Number,
            default: 1,
        },
        totalOrdersProp: Number,
    });
const current = ref(props.pageProp);
const pageSize = ref(40);
const orders = ref(props.ordersProp);

const columns = [
    {
        title: 'Folio',
        dataIndex: 'folio',
    },
    {
        title: 'Numero de muestras',
        dataIndex: 'numero_muestras',
    },
];
let w = window.innerWidth;
console.log(w);
const onShowSizeChange = (current, size) => {
    pageSize.value = size;
}

const onChange = async(page, pageSize) =>{
    orders.value = (await axios.get(`/orders-paginated?page=${page}&pageSize=${pageSize}`)).data;
    current.value = page;
}
</script>
<template>
    <Unauthorized/>
    <a-table :columns="columns" :data-source="orders" :pagination="false"/>
</template>
<style>
    .medium {
        width: 50%;
        padding: 7px 15px;
    }

    .item {
        width: 32px;
        height: 32px; 
        background-color: brown;
    }

    .large {
        width: 2250px;
    }

    .header {
        background-color: firebrick;
        padding: 0.375rem 0.5rem;
    }
</style>
