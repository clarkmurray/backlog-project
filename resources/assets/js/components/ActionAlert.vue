<template>
    <div class="row alertNotification">
        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-success text-center">
                <button type="button" class="close" data-hide="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span>
                    <a :href="itemurl" class="alert-link">{{ title }}</a> was {{ action }} <a :href="destinationurl" class="alert-link">{{ destination }}</a>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    
    export default {
        props: ['itemurl', 'title', 'action', 'destinationurl', 'destination'],
        created() {
            $(function(){
                $("[data-hide]").on("click", function(){
                    $("." + $(this).attr("data-hide")).hide();
                });
            });
        }
    }

</script>