<template>
	<div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <small class="text-center">{{text}}</small>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    data() {
        return {
            text : 'Todos os direitos reservados'
        }
    }
}
</script>

<style>
.text-center {
    text-align: center;
    width: 100%;
    position: relative;
    float: left;
}
</style>