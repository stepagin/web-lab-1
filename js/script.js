class TableModifier {
    constructor(target, columns) {
        this.table = document.getElementById(target);
        this.header = this.table.innerHTML;
        if(!this.table)
            console.log("Failed to initialise table at target: "+target);
        this.columns = this.table.rows[0].cells.length;
    }

    addRow(...cols) {
        let row = document.createElement("tr");
        for(let i = 0; i < cols.length && i < this.columns; i++) {
            let col = document.createElement("td")
            col.appendChild(document.createTextNode(cols[i]));
            row.appendChild(col);
        }

        this.table.appendChild(row);
    }

    setContent(html) {
        // console.log("function SetContent")
        this.table.innerHTML += html;
    }

    clear() {
        this.table.innerHTML = this.header;
    }
}
function get_request(link, body, event) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", link);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onloadend = () => event(xhr.response);
    xhr.send(body);
}
// function get_request_old(link, event) {
//     return $.post(link, event);
// }
window.onload = function () {
    const form = document.getElementById("form-input-variables"); // форма с входными данными
    const tm = new TableModifier("history", 5)
    const get_input_data = () => { // функция для получения данных из формы
        let formData = new FormData(form);
        // console.log("funstion get_input_data");
        return {
            X: formData.get("x_param"),
            Y: formData.get("y_param").replace(",", "."),
            R: formData.get("r_param")
        }
    }

    function submit(){
        // console.log("function submit");
        const {X: x, Y: y, R: r} = get_input_data();
        if(!y||isNaN(y)||y<-3||y>5) {
            document.getElementById("y_label").style.color = "red";
            return;
        }
        document.getElementById("y_label").style.color = "black";
        // get_request( "https://se.ifmo.ru/~s335060/web-lab-1/components/make_result.php", `{"x_param": ${x}, "y_param": ${y}, "r_param": ${r}}`, (result) => {
        get_request( "../components/make_result.php", `{"x_param": ${x}, "y_param": ${y}, "r_param": ${r}}`, (result) => {
            tm.addRow(new Date().toLocaleString(), x, y, r, result);
            document.getElementById("result").innerHTML = "Результат: " + result;
        });

    }

    window.document.getElementById("send_request").onclick = submit;


}

function get_length_of_body() {
    return (document.getElementById("ul").children.length + 1);
}

function add_one_element() {
    let li = document.createElement('li');
    li.textContent = get_length_of_body();
    li.onclick = function () {
        console.log(this.innerHTML);
    }
    let s = window.document.getElementById("ul");
    s.appendChild(li);
    document.body.lastChild = s;

}
