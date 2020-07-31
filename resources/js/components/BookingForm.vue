<template>
  <div>
    <div class>
      <mdb-card class="bookingformcard">
        <mdb-card-body class="formbody">
          <mdb-row>
            <mdb-col>
              <mdb-input label="name" v-model="bookingForm.name" icon="user" />
            </mdb-col>
            <mdb-col>
              <mdb-input label="phone" v-model="bookingForm.phone" icon="phone" />
            </mdb-col>
          </mdb-row>
          <mdb-row>
            <mdb-col>
              <mdb-input
                label="your email"
                icon="envelope"
                v-model="bookingForm.email"
                type="email"
              />
            </mdb-col>
            <mdb-col>
              <mdb-input
                :min="2"
                :max="10"
                v-model="bookingForm.seats_number"
                icon="user-friends"
                type="number"
                label="guests"
              />
            </mdb-col>
          </mdb-row>

          <mdb-row>
            <mdb-col>
              <mdb-date-picker label="date" v-model="bookingForm.booking_date" icon="calendar" />
            </mdb-col>
            <mdb-col>
              <mdb-time-picker label="time" icon="clock" />
            </mdb-col>
          </mdb-row>
          <mdb-row>
            <mdb-col>
              <mdb-select
                multiple
                v-model="selectOptions"
                label="meal (optional)"
                icon="check-square"
              />
            </mdb-col>
          </mdb-row>
          <mdb-row>
            <mdb-col>
              <mdb-input
                type="textarea"
                label="special requests or food preferances notes (optional)"
                icon="pen"
                v-model="bookingForm.notes"
                :rows="1"
              />
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex justify-content-end">
          <mdb-btn
            class="white-text reservebutton"
            icon="paper-plane"
            darkWaves
            @click="addReservation"
          >Reserve table</mdb-btn>
        </mdb-card-footer>
      </mdb-card>
    </div>
  </div>
</template>

<script>
import {
  mdbRow,
  mdbCol,
  mdbInput,
  mdbBtn,
  mdbCard,
  mdbCardBody,
  mdbCardHeader,
  mdbCardTitle,
  mdbSelect,
  mdbDatePicker,
  mdbTimePicker,
  mdbCardFooter,
  mdbAutocomplete,
} from "mdbvue";
export default {
  components: {
    mdbRow,
    mdbCol,
    mdbInput,
    mdbBtn,
    mdbCard,
    mdbCardBody,
    mdbCardHeader,
    mdbCardTitle,
    mdbSelect,
    mdbDatePicker,
    mdbTimePicker,
    mdbCardFooter,
    mdbAutocomplete,
  },
  data() {
    return {
      numeric: "hello",
      selectOptions: [
        { text: "Breakfast", value: "Option 1" },
        { text: "Dinner", value: "Option 2" },
        { text: "Brunch", value: "Option 3" },
        { text: "Supper", value: "Option 4" },
      ],
      food: ["Glutenfree", "Vegetarian", "Vegan", "Sugarfree"],

      bookingForm: {
        name: "",
        phone: "",
        email: "",
        booking_date: "",
        seats_number: 1,
        notes: "",
      },
    };
  },

  methods: {
    addReservation() {
      this.$fire({
        type: "info",
        title: "<strong> Double check</strong>",
        html:
          "<p>Your name: " +
          this.bookingForm.name +
          ", phone number used to contact you: " +
          this.bookingForm.phone +
          ".</p> <p> your table reservation date is on " +this.bookingForm.booking_date+", for " +this.bookingForm.seats_number+" people.</p>",
        showCancelButton: true,
        confirmButtonText: "Confirm the reservation!",
      }).then((result) => {
        console.log(result.value);
        if (result.value) {
          axios
            .post("./newBooking", this.bookingForm)
            .catch((error) => {
              this.$fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: "please try again later, or contact us on:",
              });
            })
            .then(({ data }) => {
              console.log(data);

              this.$fire({
                title: "Sent!",
                text:
                  "Your reservation request has been sent and is awaiting confirmation.",
                type: "success",
              });
            });
        }
      });
    },
  },
};
</script>

<style>
.bookingformcard {
  background-color: transparent;

  padding: 0px 150px 0px 150px;
}

.bookingformcard .formbody {
  margin-top: 50px;
}

.bookingformcard .md-form label {
  color: white;
  opacity: 86%;
  font-weight: 400;
}

.bookingformcard .form-control {
  color: white !important;
}

.bookingformcard .md-form .active {
  color: #f9cf64 !important;
}

.bookingformcard .md-form i {
  color: white;
  font-size: 1.4em;
}

.primary-color {
  background-color: #414141 !important;
}

.reservebutton {
  background-color: #414141 !important;
  border: 1px solid #f9cf64 !important;
}

.swal2-confirm{
  background-color: #414141 !important;
  border: 1px solid #f9cf64 !important;
}
.swal2-info{
  color: #414141!important;
  border-color: #f9cf64 !important;
}
</style>