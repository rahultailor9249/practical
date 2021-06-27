<template>
    <div id="app">
        <h1 style="text-align: center;">Basic Details</h1>
        <v-app id="inspire">
            <v-app id="inspire">
                <v-main>
                    <v-container>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="First Name"
                                    name="firstname"
                                    type="text"
                                    v-model="Form.firstName"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="9"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Last Name"
                                    id="lastname"
                                    name="Last Name"
                                    type="text"
                                    v-model="Form.lastName"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="9"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Email"
                                    id="email"
                                    name="email"
                                    type="text"
                                    v-model="Form.email"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Designation"
                                    name="designation"
                                    type="text"
                                    v-model="Form.designation"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Address 1"
                                    id="address1"
                                    name="address1"
                                    type="text"
                                    v-model="Form.address1"
                                ></v-text-field>
                            </v-col>

                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Address2"
                                    id="address2"
                                    name="address2"
                                    type="text"
                                    v-model="Form.address2"
                                ></v-text-field>
                            </v-col>

                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Phone Number"
                                    id="phonenumber"
                                    name="phonenumber"
                                    type="number"
                                    v-model="Form.phonenumber"
                                ></v-text-field>
                            </v-col>

                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="City"
                                    id="city"
                                    name="city"
                                    type="text"
                                    v-model="Form.city"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-select
                                    :items="state"
                                    label="State"
                                    onchange="onstatechange"
                                    v-model="Form.state"
                                ></v-select>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-radio-group row v-model="Form.gender">
                                    <v-radio
                                        label="Male"
                                        color="blue"
                                        value="male"
                                    ></v-radio>
                                    <v-radio
                                        label="Female"
                                        color="blue"
                                        value="female"
                                    ></v-radio>
                                </v-radio-group>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-select
                                    :items="statuslist"
                                    label="Realtionship status"
                                    onchange="onchangeStatus"
                                    v-model="Form.status"
                                ></v-select>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-menu
                                    v-model="menu2"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="date"
                                            label="Date Of Birth"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="date"
                                        @input="menu2 = false"
                                        @change="dobchange"
                                    ></v-date-picker>
                                </v-menu>
                            </v-col>
                        </v-row>

                        <h1 align="center">Education Details</h1>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <h4>SSC result</h4>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Board"
                                    name="firstname"
                                    type="text"
                                    v-model="Education.ssc.board"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Passing Year"
                                    name="firstname"
                                    type="text"
                                    v-model="Education.ssc.year"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Percentage"
                                    name="firstname"
                                    type="text"
                                    v-model="Education.ssc.percentage"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <h4>HSC result</h4>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Board"
                                    name="firstname"
                                    type="text"
                                    v-model="Education.hsc.board"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Passing Year"
                                    name="firstname"
                                    type="text"
                                    v-model="Education.hsc.year"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Percentage"
                                    name="firstname"
                                    type="text"
                                    v-model="Education.hsc.percentage"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <h4>Bechelor result</h4>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Course Name"
                                    name="coursename"
                                    type="text"
                                    v-model="Education.bechelor.course"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="University Name"
                                    name="university"
                                    type="text"
                                    v-model="Education.bechelor.university"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Passing year"
                                    name="year"
                                    type="text"
                                    v-model="Education.bechelor.year"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-text-field
                                    label="Percentage"
                                    name="percentage"
                                    type="text"
                                    v-model="Education.bechelor.percentage"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <h4>Master's result</h4>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Course Name"
                                    name="coursename"
                                    type="text"
                                    v-model="Education.master.course"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="University Name"
                                    name="university"
                                    type="text"
                                    v-model="Education.master.university"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Passing year"
                                    name="year"
                                    type="text"
                                    v-model="Education.master.year"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-text-field
                                    label="Percentage"
                                    name="percentage"
                                    type="text"
                                    v-model="Education.master.percentage"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <h1 align="center">Work Experience</h1>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <h4>company name</h4>
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-text-field
                                    label="Company Name"
                                    name="companyname"
                                    type="text"
                                    v-model="company.second.name"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-text-field
                                    label="Designation"
                                    name="companydesignation"
                                    type="text"
                                    v-model="company.second.designation"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-menu
                                    v-model="FromDate"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="FromDateDate"
                                            label="From Date"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="FromDateDate"
                                        @input="FromDate = false"
                                        @change="companyFromDate"
                                    ></v-date-picker>
                                </v-menu>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-menu
                                    v-model="ToDate"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="ToDateDate"
                                            label="To date"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="ToDateDate"
                                        @input="ToDate = false"
                                        @change="companyToDate"
                                    ></v-date-picker>
                                </v-menu>
                            </v-col>
                        </v-row>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <h4>company name</h4>
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-text-field
                                    label="Company Name"
                                    name="companyname"
                                    type="text"
                                    v-model="company.first.name"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-text-field
                                    label="Designation"
                                    name="companydesignation"
                                    type="text"
                                    v-model="company.first.designation"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-menu
                                    v-model="FromDate1"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="FromDateDate1"
                                            label="From Date"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="FromDateDate1"
                                        @input="FromDate1 = false"
                                        @change="companyFromDate1"
                                    ></v-date-picker>
                                </v-menu>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-menu
                                    v-model="ToDate1"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="ToDateDate1"
                                            label="To date"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="ToDateDate1"
                                        @input="ToDate1 = false"
                                        @change="companyToDate1"
                                    ></v-date-picker>
                                </v-menu>
                            </v-col>
                        </v-row>
                        <h1 style="text-align: center;">Technologies You know</h1>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-checkbox
                                    v-model="techno.php.language"
                                    label="PHP"
                                    value="php"
                                    @change="phpcheck"
                                ></v-checkbox>
                            </v-col>
                            <v-radio-group :disabled="phpcheckbox" v-model="techno.php.level">
                                <v-radio
                                    label="Beginer"
                                    color="blue"
                                    value="Beginer"
                                ></v-radio>
                                <v-radio
                                    label="Middeator"
                                    color="blue"
                                    value="Middeator"
                                ></v-radio>
                                <v-radio
                                    label="Expert"
                                    color="blue"
                                    value="Expert"
                                ></v-radio>
                            </v-radio-group>
                        </v-row>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <v-col
                                cols="12"
                                sm="6"
                                md="2"
                            >
                                <v-checkbox
                                    v-model="checkbox"
                                    label="MySQL"
                                    value="sql"
                                    @change="sqlcheck"
                                ></v-checkbox>
                            </v-col>
                            <v-radio-group :disabled="sqlcheckbox" v-model="techno.sql.level">
                                <v-radio
                                    label="Beginer"
                                    color="blue"
                                    value="Beginer"
                                ></v-radio>
                                <v-radio
                                    label="Middeator"
                                    color="blue"
                                    value="Middeator"
                                ></v-radio>
                                <v-radio
                                    label="Expert"
                                    color="blue"
                                    value="Expert"
                                ></v-radio>
                            </v-radio-group>
                        </v-row>
                        <h1 style="text-align: center;">Reference contact number</h1>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Name"
                                    name="name"
                                    type="text"
                                    v-model="ref.name"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="9"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Contact Number"
                                    id="contactnumber"
                                    name="Last Name"
                                    type="text"
                                    v-model="ref.contactnumber"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Realtion"
                                    name="realtion"
                                    type="text"
                                    v-model="ref.relation"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-col
                            cols="12"
                            sm="6"
                            md="3"
                        >
                        </v-col>
                        <h1 style="text-align: center;">Preferance location</h1>
                        <v-row
                            align="left"
                            justify="left"
                        >
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-select
                                    v-model="pref.location"
                                    :items="locations"
                                    label="Select"
                                    multiple
                                    chips
                                    hint="prefered location"
                                    persistent-hint
                                ></v-select>
                            </v-col>
                            <v-col
                                cols="9"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Notice Period"
                                    id="contactnumber"
                                    name="noticeperiod"
                                    type="text"
                                    v-model="pref.notice"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Expacted salary"
                                    name="realtion"
                                    type="text"
                                    v-model="pref.esalary"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-text-field
                                    label="Current salary"
                                    name="realtion"
                                    type="text"
                                    v-model="pref.csalary"
                                ></v-text-field>
                            </v-col>
                            <v-col
                                cols="12"
                                sm="6"
                                md="3"
                            >
                                <v-select
                                    :items="department"
                                    label="department"
                                    onchange="ondepartmentchange"
                                    v-model="pref.department"
                                ></v-select>
                            </v-col>

                        </v-row>
                        <v-spacer></v-spacer>
                        <v-btn @click="submitData()" color="primary">update</v-btn>
                    </v-container>
                </v-main>
            </v-app>
        </v-app>
    </div>
</template>
<script>
    import axios from "axios";

    export default {
        data: () => ({
            date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
            ToDateDate: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
            FromDateDate: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
            ToDateDate1: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
            FromDateDate1: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
            menu: false,
            phpcheckbox: true,
            sqlcheckbox: true,
            modal: false,
            ToDate: false,
            FromDate: false,
            ToDate1: false,
            FromDate1: false,
            menu2: false,
            locations: ['surat', 'baruch', 'baroda'],
            Form: {
                id:'',
                firstName: '',
                lastName: '',
                designation: '',
                email: '',
                address1: '',
                address2: '',
                phonenumber: '',
                city: '',
                state: 'Gujarat',
                gender: '',
                status: 'Single',
                dob: '',
            },
            Education: {
                ssc: {
                    board: '',
                    year: '',
                    percentage: '',
                },
                hsc: {
                    board: '',
                    year: '',
                    percentage: '',
                },
                bechelor: {
                    course: '',
                    university: '',
                    year: '',
                    percentage: '',
                },
                master: {
                    course: '',
                    year: '',
                    university: '',
                    percentage: '',
                },
            },
            company: {
                first: {
                    name: '',
                    designation: '',
                    toDate: '',
                    fromDate: '',
                },
                second: {
                    name: '',
                    designation: '',
                    toDate: '',
                    fromDate: '',
                },
            },
            techno: {
                php: {
                    level: '',
                    language: '',
                },
                sql: {
                    level: '',
                    language: '',
                }
            },
            ref: {
                name: '',
                contactnumber: '',
                relation: '',
            },
            pref: {
                location: [],
                notice: '',
                csalary: '',
                esalary: '',
                department: 'developer',
            },
            mainForm: [],
            department: ['developer', 'designer', 'marketing'],
            state: ['Gujarat', 'MH', 'Bihar'],
            statuslist: ['Single', 'Married']
        }),
        methods: {
            async submitData() {
                this.mainForm = {
                    'basic':this.Form,
                    'education':this.Education,
                    'company':this.company,
                    'techno':this.techno,
                    'ref':this.ref,
                    'pref':this.pref,
                };
                console.log(this.mainForm);
                try {
                    let {data} = await axios.post('/api/employee/update',this.mainForm);
                    this.notification = data.message;
                    this.$router.push('/list');
                } catch({response}) {
                    if(response.data.message) {
                        this.notification = response.data.message;
                        ``                    }
                }
            },
            onstatechange(value) {
                this.Form.state = value;
            },
            onchangeStatus(value) {
                this.Form.status = value;
            },
            dobchange(value) {
                this.Form.dob = value;
            },
            companyToDate(value) {
                this.company.second.toDate = value;
            },
            companyFromDate(value) {
                this.company.second.fromDate = value;
            },
            companyToDate1(value) {
                this.company.first.toDate = value;
            },
            companyFromDate1(value) {
                this.company.first.fromDate = value;
            },
            phpcheck(value) {
                if (value == "php") {
                    this.phpcheckbox = false;
                    this.techno.php.language = value;
                } else {
                    this.phpcheckbox = true;
                    this.techno.php.language = '';
                }
            },
            sqlcheck(value) {
                if (value == "sql") {
                    this.sqlcheckbox = false;
                    this.techno.sql.language = value;
                } else {
                    this.sqlcheckbox = true;
                    this.techno.sql.language = '';
                }
            },
            ondepartmentchange(value) {
                this.pref.department = value;
            },
            async editdata() {
                let {data} = await axios.post('/api/employee/edit', {id: this.$route.params.employeeId});
                var name = data.data.name.split(" ");
                this.Form.firstName = name[0];
                this.Form.lastName = name[1];
                this.Form.id = this.$route.params.employeeId;
                this.Form.email = data.data.email;
                this.Form.designation = data.data.basic.designation;
                this.Form.address1 = data.data.basic.address;
                this.Form.phonenumber = data.data.basic.phone_number;
                this.Form.city = data.data.basic.city;
                this.Form.state = data.data.basic.state;
                this.Form.gender = data.data.basic.gender;
                this.Form.status = data.data.basic.status;
                this.Form.dob = data.data.basic.date_of_birth;
                this.Education.ssc = JSON.parse(data.data.education.ssc);
                this.Education.hsc = JSON.parse(data.data.education.hsc);
                this.Education.bechelor = JSON.parse(data.data.education.bechelor_degree);
                this.Education.master = JSON.parse(data.data.education.master_degree);
                this.company = JSON.parse(data.data.work.company_detail);
                this.techno = JSON.parse(data.data.technical.language_name);
                this.ref = JSON.parse(data.data.ref.contact_detail);
                this.pref.location = JSON.parse(data.data.pref.location);
                this.pref.notice = data.data.pref.notice_period;
                this.pref.esalary = data.data.pref.ectc;
                this.pref.csalary = data.data.pref.cctc;
                this.pref.department = data.data.pref.department_name
            },
        },
        mounted() {
            this.editdata();
        }

    }
</script>
