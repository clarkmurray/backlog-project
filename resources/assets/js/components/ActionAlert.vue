<template>
    <div class="row alertNotification">
        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-success text-center"">
                <button type="button" class="close" data-hide="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span>
                    <a :href="itemURL" class="alert-link">{{ itemTitle }}</a> was {{ action }} <a :href="destinationURL" class="alert-link">{{ destination }}</a>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['itemURL', 'itemTitle', 'action', 'destinationURL', 'destination'],
        created() {
            $(function(){
                $("[data-hide]").on("click", function(){
                    $("." + $(this).attr("data-hide")).hide();
                });
            });
        }
    }


</script>