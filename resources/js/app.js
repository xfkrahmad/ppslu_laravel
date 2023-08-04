import "./bootstrap";
import "tinymce/tinymce";
import "tinymce/skins/ui/oxide/skin.min.css";
import "tinymce/skins/content/default/content.min.css";
import "tinymce/skins/content/default/content.css";
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";
import "tinymce/models/dom/model";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// For Toastr (Toast messages)
import toastr from "toastr";
window.toastr = toastr;

// For SweetAlert2
import Swal from "sweetalert2";
window.Swal = Swal;
