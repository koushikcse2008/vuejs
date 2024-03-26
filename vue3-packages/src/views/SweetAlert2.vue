<template>
    <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Sweet Alert 2</h2>

    <p>Simple Alert <button class="btn btn-primary" @click="getAlert()">Click Here</button></p>

    <p>Success Alert <button class="btn btn-success" @click="showSuccessMsg()">Click Here</button></p>

    <p>Confirm Dialog <button class="btn btn-warning" @click="confirmDialog()">Click Here</button></p>

    <p>Different Dialog <button class="btn btn-danger" @click="differentDialog()">Click Here</button></p>


</template>

<script>
import Swal from 'sweetalert2';
export default {
    name: "SweetAlert2",
    data() {
        return {

        }
    },
    created() {

    },
    methods: {
        getAlert() {
            alert("Simple Alert");
        },
        showSuccessMsg() {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
                footer: '<a href="#">Why do I have this issue?</a>'
            });
        },
        confirmDialog() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, confirm it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: "Confirmed!",
                    text: "Your have confirmed it.",
                    icon: "success"
                    });
                } else {
                    Swal.fire({
                    title: "Error!",
                    text: "You have cancelled it.",
                    icon: "error"
                    });
                }
            });
        },
        differentDialog() {
            Swal.fire({
                title: "<strong>HTML <u>example</u></strong>",
                icon: "info",
                html: `You can use <b>bold text</b>, <a href="https://www.google.co.in" target="_blank">links</a>, and other HTML tags`,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: `<i class="fa fa-thumbs-up"></i> Great!`,
                confirmButtonAriaLabel: "Thumbs up, great!",
                cancelButtonText: `<i class="fa fa-thumbs-down"></i>`,
                cancelButtonAriaLabel: "Thumbs down"
            });
        }
    }
}
</script>
