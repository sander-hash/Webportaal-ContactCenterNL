
<template>
 <div>
        <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Betalen
            </h2>

        </template>




     <template #footer>

         

         </template>

    </app-layout>


 </div>
 


</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    const rankingsBody = document.querySelector("#rankings-table > tbody");

    console.log(rankingsBody);


    export default {
      props:['sd'],
        components: {
          
            AppLayout,
            Welcome,
        },
    }
    
</script>
