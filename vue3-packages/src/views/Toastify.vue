<template>
    <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Toastify</h2>

    <h3>White Background:</h3>

    <button class="btn btn-success me-2" @click="success()">Success</button>
    <button class="btn btn-danger me-2" @click="error()">Error</button>
    <button class="btn btn-warning me-2" @click="warning()">Warning</button>
    <button class="btn btn-info me-2" @click="info()">Info</button>

    <br /> <br /><h3>Solid Background Color:</h3>
    <button class="btn btn-success me-2" @click="successColor()">Success</button>
    <button class="btn btn-danger me-2" @click="errorColor()">Error</button>
    <button class="btn btn-warning me-2" @click="warningColor()">Warning</button>
    <button class="btn btn-info me-2" @click="infoColor()">Info</button>

    <br /> <br /><h3>Multiple Color:</h3>
    <button class="btn btn-info btn-success" @click="multiColor()">Multiple Color</button>
    
    
</template>

<script>
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

export default {
    name: "Toastify",
    data() {  
        return {
            //delcare variable
        }      
    },
    methods: {
        success() {
            toast.success('Success Message!');
        },
        error() {
            toast.error('Error Message!');
        },
        warning() {
            toast.warning('Warning Message!');
        },
        info() {
            toast.info('Info Message!');
        },
        successColor() {
            toast.success('Success Message!', {
                theme: "colored"
            });
        },
        errorColor() {
            toast.error('Error Message!', {
                theme: "colored"
            });
        },
        warningColor() {
            toast.warning('Warning Message!', {
                theme: "colored"
            });
        },
        infoColor() {
            toast.info('Info Message!', {
                theme: "colored"
            });
        },
        multiColor() {
            toast('Success Message!');
        }
    }
}
</script>
