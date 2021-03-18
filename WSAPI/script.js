const listUserButton = document.querySelector("#btn_js");
const createUserButton = document.querySelector("#btn_jquery");
const listUserContainer = document.querySelector("#js_result");

const URL = "https://reqres.in/api";

const fetcher = async (url, options = { methode: "GET" }) => {
    const response = await fetch(url, options);
    return response.json();
};

const getListUser = async (currentPage = 1) => {
    const { data, page, total_pages } = await fetcher(
        `${URL}/users?page=${currentPage}`
    );

    const dataHtml = data
        .map(
            ({ avatar, email, first_name, last_name }) =>
                `<div class="user">
<h1 class="user__name" >${first_name}${last_name}</h1>
<a class="user__email" href="${email}">${email}</a>
<img class="user__avatar" src="${avatar}" />
</div>`
        )
        .join("");
    const nextPage = page < total_pages ? page + 1 : total_pages;
    const footerHtml = `<span>${page}/${total_pages}- <a id="fetch-next-page">Page suivante</a></span>`;
    listUserContainer.innerHTML = `<div class="user-container">${dataHtml}</div>${footerHtml}`;
    document
        .querySelector("#fetch-next-page")
        .addEventListener("click", () => getListUser(nextPage));
};

listUserButton.addEventListener("click", () => getListUser());

createUserButton.addEventListener("click", async () => {
    const json = await fetcher(
        `${URL}/users?name=Jean&job=Director`, { method: "POST" }
    );
    console.log(json);

});

