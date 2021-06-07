

export const store = {
    state: {
        emkOfficeData: [
            

        ]
    },
    getLang () {
        const langString = navigator.language || navigator.userLanguage;
        if (langString == "ch-FR" || langString == "fr-FR" || langString == "fr" ){
            return "fr";
        } else {
            return "de";
        }
    },
    setActiveDay (dayId) {
        this.state.calendarWeekData.map(dayObj => {
            dayObj.id === dayId ? dayObj.active = true : dayObj.active = false;
        });
    },
    storeEvent (eventTitle, eventColor) {
        const activeDay = this.getActiveDay();
        activeDay.events.push( {'title': eventTitle, 'edit': false, 'color': eventColor } );
    },
    editEvent (dayId, eventTitle) {
        this.resetEditOfAllEvents();
        const dayObj = this.state.calendarWeekData.find( day => day.id === dayId );
        const eventObj = dayObj.events.find( event => event.title === eventTitle);
        eventObj.edit = true;
    },
    resetEditOfAllEvents () {
        this.state.calendarWeekData.map( dayObj => {
            dayObj.events.map ( event => {
                event.edit = false;
            });
        });
    },
    updateEvent (dayId, oldEventTitle, newEventTitle) {
        const dayObj = this.state.calendarWeekData.find( day => day.id === dayId );
        const eventObj = dayObj.events.find( event => event.title === oldEventTitle);
        eventObj.title = newEventTitle;
        eventObj.edit = false;
    },
    deleteEvent (dayId, eventTitle) {
        const dayObj = this.state.calendarWeekData.find( day => day.id === dayId );
        const eventIndex = dayObj.events.findIndex( event => event.title === eventTitle );
        dayObj.events.splice(eventIndex, 1);
    }
}