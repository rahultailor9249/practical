<template>
    <div id="app">

        <v-app id="inspire">
            <v-app id="inspire">
                <v-main>
                    <v-container
                        class="fill-height"
                        fluid
                    >
                        <v-row
                            align="center"
                            justify="center"
                        >
                            <v-col
                                cols="12"
                                sm="8"
                                md="4"
                            >
                                <v-alert v-if="notification!=''"
                                         v-model="alert"
                                         dismissible
                                         color="cyan"
                                         border="left"
                                         elevation="2"
                                         colored-border
                                >
                                    {{this.notification}}
                                </v-alert>
                                <v-card class="elevation-12">
                                    <v-toolbar
                                        color="primary"
                                        dark
                                        flat
                                    >
                                        <v-toolbar-title>Login form</v-toolbar-title>
                                    </v-toolbar>
                                    <v-card-text>
                                        <v-form>
                                            <v-text-field
                                                v-model="Form.email"
                                                label="Login"
                                                name="login"
                                                prepend-icon="mdi-account"
                                                type="text"
                                            ></v-text-field>

                                            <v-text-field
                                                v-model="Form.password"
                                                id="password"
                                                label="Password"
                                                name="password"
                                                prepend-icon="mdi-lock"
                                                type="password"
                                            ></v-text-field>
                                        </v-form>
                                    </v-card-text>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn @click="submitdata()" color="primary">Login</v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-main>
            </v-app>
        </v-app>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data: () => ({
            Form:{
                email:'',
                password:'',
            },
            notification:'',
        }),
        methods:{
            async submitdata() {
                try {
                    let {data} = await axios.post('/api/login  ',this.Form);
                    this.notification = data.message;
                    this.$router.push('/list');
                } catch({response}) {
                    if(response.data.message) {
                        this.notification = response.data.message;
``                    }
                }
            }
        }

    }
</script>
