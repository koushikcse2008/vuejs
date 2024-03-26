<template>
    <h2 class="text-danger border-bottom border-2 border-danger fw-bold">Font Awesome</h2>
    <p>Follow the below steps:</p>
    <p>Step 1: Install the bootstrap packages using npm e.g.  $npm install font-awesome --save</p>
    <p>Step 2: Add the css and js in the "src/main.js" file</p>
    <p>
        import '../node_modules/font-awesome/css/font-awesome.css';
    </p>

    <p>Font Icon Example:</p>
    <p>
        <table cellpadding="2" cellspacing="2">
            <tr>
                <td style="border: 2px solid #000;"><i class="fa fa-trash"></i></td>
                <td style="border: 2px solid #000;"><i class="fa fa-pencil"></i></td>
                <td style="border: 2px solid #000;"><i class="fa fa-envelope"></i></td>
                <td style="border: 2px solid #000;"><i class="fa fa-file"></i></td>
                <td style="border: 2px solid #000;"><i class="fa fa-credit-card"></i></td>
            </tr>
        </table>   
    </p>
</template>

<script>
export default {
    name: "FontAwesome",
    data() {
        return {
            //declare variable
        }
    },
}
</script>

<style scoped>
table tr td { border: 2px solid #000; padding: 10px 60px; }
</style>