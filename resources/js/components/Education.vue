<template>
    <div id="app">
        <v-app id="inspire">
            <v-app id="inspire">
                <v-main>
                    <v-container
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
                                <v-card class="elevation-12">
                                    <v-toolbar
                                        color="primary"
                                        dark
                                        flat
                                    >
                                        <v-title>Education Details Form</v-title>
                                    </v-toolbar>
                                    <v-card-text>
                                        <v-form>

                                            <label>SSC Result</label>
                                            <v-text-field
                                                label="Name of Board"
                                                name="board"
                                                type="text"
                                                v-model="Form.nameSSC"
                                            ></v-text-field>

                                            <v-text-field
                                                label="passing year"
                                                id="year"
                                                name="year"
                                                type="text"
                                                v-model="Form.yearSSC"
                                            ></v-text-field>

                                            <v-text-field
                                                label="Percentage"
                                                name="percentage"
                                                type="text"
                                                v-model="Form.perSSC"
                                            ></v-text-field>

                                            <v-divider></v-divider>

                                            <label>hSC/diploma Result</label>
                                            <v-text-field
                                                label="Name of Board"
                                                name="board"
                                                type="text"
                                                v-model="Form.nameHSC"
                                            ></v-text-field>

                                            <v-text-field
                                                label="passing year"
                                                id="year"
                                                name="year"
                                                type="text"
                                                v-model="Form.yearHSC"
                                            ></v-text-field>

                                            <v-text-field
                                                label="Percentage"
                                                name="percentage"
                                                type="text"
                                                v-model="Form.perHSC"
                                            ></v-text-field>

                                            <v-divider></v-divider>

                                            <label>Bechelor degree</label>
                                            <v-text-field
                                                label="Course Name"
                                                name="board"
                                                type="text"
                                                v-model="Form.namebechelorcourse"
                                            ></v-text-field>

                                            <v-text-field
                                                label="University"
                                                id="year"
                                                name="year"
                                                type="text"
                                                v-model="Form.yearbecheloruni"
                                            ></v-text-field>

                                            <v-text-field
                                                label="Year"
                                                name="year"
                                                type="text"
                                                v-model="Form.becheloryear"
                                            ></v-text-field>

                                            <v-text-field
                                                label="Percentage"
                                                id="email"
                                                name="email"
                                                type="email"
                                                v-model="Form.BechelorPer"
                                            ></v-text-field>

                                            <v-divider></v-divider>

                                            <label>Master's degree</label>
                                            <v-text-field
                                                label="Course Name"
                                                name="board"
                                                type="text"
                                                v-model="Form.namemastercourse"
                                            ></v-text-field>

                                            <v-text-field
                                                label="University"
                                                id="year"
                                                name="year"
                                                type="text"
                                                v-model="Form.yearmasteruni"
                                            ></v-text-field>

                                            <v-text-field
                                                label="Year"
                                                name="year"
                                                type="text"
                                                v-model="Form.permasteryear"
                                            ></v-text-field>

                                            <v-text-field
                                                label="Percentage"
                                                id="email"
                                                name="email"
                                                type="email"
                                                v-model="Form.masterper"
                                            ></v-text-field>
                                        </v-form>
                                    </v-card-text>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn @click="submitData()" color="primary">Next Page</v-btn>
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
    export default {
        data: () => ({
            date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
            menu: false,
            modal: false,
            menu2: false,
            Form:{

            },
            state:['Gujarat','MH','Bihar'],
            statuslist:['Single','Married']
        }),
        methods:{
            submitData() {
                this.$router.push({path: '/education'})
                console.log(this.Form);
            },
            onstatechange(value) {
                this.Form.state = value;
            },
            onchangeStatus(value) {
                this.Form.status = value;
            },
            dobchange(value) {
                this.Form.dob = value;
            }
        },

    }
</script>
