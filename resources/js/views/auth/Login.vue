<script setup>
import {reactive,ref} from "vue";
import {useRouter} from "vue-router";
import axios from "axios";

const router =useRouter()
let errors = ref([])

const form = reactive({

    email:"",
    password:"",

})
 const login = async()=>{
     try{

         const response = await axios.post('api/auth/login', form);

         if(response.data.message=="verify your email"){
            router.push('/')

            toast.fire({icon:"success",title:"Подтвердите свой адрес электронной почты для входа в систему."})

         }else{

             localStorage.setItem('access_token', response.data.access_token);
             router.push('/about')
           


         }



    }catch(error){

   }

}


</script>
<template>
    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Dental Clinic You Can Trust</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Login</h1>
                        <div>
                            <div class="row g-3">


                                <div class="col-12 col-sm-6">
                                    <input  v-model="form.email" type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                        <input  v-model="form.password" type="password" class="form-control bg-light border-0" placeholder="password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit" @click.prevent = "login">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

</template>
