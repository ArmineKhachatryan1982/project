
<script setup>
import { ref } from "vue";
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";

const calendarOptions = ref({
    plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
    initialView: "dayGridMonth",
    editable: true,
    selectable: true,
    events: [
        { title: "Событие 1", start: "2024-02-01" },
        { title: "Событие 2", start: "2024-02-05", end: "2024-02-07" },
    ],
    dateClick: (info) => {
       
        alert(`Вы кликнули на ${info.dateStr}`);
    },
    eventClick: (info) => {
        alert(`Выбрано событие: ${info.event.title}`);
    },
});
</script>
<template>
    <div>
        <FullCalendar
            :options="calendarOptions"
        />
    </div>
</template>
