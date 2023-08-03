import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// For Toastr (Toast messages)
import toastr from "toastr";
window.toastr = toastr;

// For SweetAlert2
import Swal from "sweetalert2";
window.Swal = Swal;
