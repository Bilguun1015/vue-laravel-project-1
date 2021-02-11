<template>
    <div>
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
    </div>
</template>

<script>
// registering an component to another component
import BookableListItem from "./BookableListItem";
export default {
    components: {
        BookableListItem
    }
};
</script>
