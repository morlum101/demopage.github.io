const token = $('meta[name="csrf-token"]').attr("content");
const baseUrl = window.location.origin;
let pond;

$(() => {
    // Activity Logs
    if (window.location.href === route("admin.activity_logs.index")) {
        const columns = [
            {
                data: "id",
            },
            { data: "description" },
            {
                data: "created_at",
                render(data) {
                    return formatDate(data, "datetime");
                },
            },
            { data: "properties.ip" },
        ];
        c_index(
            $(".activitylog_dt"),
            route("admin.activity_logs.index"),
            columns
        );
    }

    //Category;
    if (window.location.href === route("admin.categories.index")) {
        const columns = [
            {
                data: "id",
                render(data, type, row) {
                    return row.DT_RowIndex;
                },
            },
            { data: "name" },
            { data: "actions", orderable: false, searchable: false },
        ];
        c_index($(".category_dt"), route("admin.categories.index"), columns);
    }

    // Municipality

    if (window.location.href === route("admin.municipalities.index")) {
        const columns = [
            {
                data: "id",
                render(data, type, row) {
                    return row.DT_RowIndex;
                },
            },
            { data: "name" },
            { data: "actions", orderable: false, searchable: false },
        ];
        c_index(
            $(".municipality_dt"),
            route("admin.municipalities.index"),
            columns
        );
    }

    // Barangay
    if (window.location.href === route("admin.barangays.index")) {
        const columns = [
            {
                data: "id",
                render(data, type, row) {
                    return row.DT_RowIndex;
                },
            },
            { data: "name" },
            { data: "municipality.name" },
            { data: "actions", orderable: false, searchable: false },
        ];
        c_index($(".barangay_dt"), route("admin.barangays.index"), columns);
    }

    //User;
    if (window.location.href === route("admin.users.index")) {
        const columns = [
            { data: "id" },
            {
                data: "avatar",
                render(data) {
                    return handleNullAvatar(data);
                },
            },
            { data: "name" },
            {
                data: "email_verified_at",
                render(data) {
                    return isVerified(data);
                },
            },
            {
                data: "role",
                render(data) {
                    return `<span class='badge badge-soft-success text-capitalize'>${data}</span>`;
                },
            },
            {
                data: "is_activated",
                render(data) {
                    return isActivated(data);
                },
            },
            {
                data: "created_at",
                render(data) {
                    return formatDate(data.date, "full");
                },
            },
            { data: "actions", orderable: false, searchable: false },
        ];
        c_index($(".user_dt"), route("admin.users.index"), columns);
    }
});

//=========================================================
// Custom Functions()

document.addEventListener("DOMContentLoaded", function (event) {
    // initiate global glightbox

    setTimeout(() => {
        GLightbox({
            selector: ".glightbox",
        });
    }, 1000);
});
