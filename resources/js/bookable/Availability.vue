<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">
            Check Availability
        </h6>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="from"
                    placeholder="Start date"
                    v-model="from"
                    @keyup.enter="check"
                />
            </div>

            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    name="to"
                    placeholder="End date"
                    v-model="to"
                    @keyup.enter="check"
                />
            </div>
        </div>
        <!-- v-on:click is same as @click -->
        <button class="btn btn-secondary btn-block" @click="check">
            Check!
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            from: null,
            to: null
        };
    },

    methods: {
        check() {
            alert("hey");
        }
    }
};
</script>

<style scoped>
label {
    font-size: 0.7rem;
    text-transform: uppercase;
    color: gray;
    font-weight: bolder;
}
</style>
