document.addEventListener("DOMContentLoaded", async function () {
  const API_URL = "https://andres.sell2rent.com/api",
    BASE_URL = "https://andres.sell2rent.com/storage",
    LOCAL_URL = getCurrentURL(),
    LIMIT = 12;
  let currentPage = 1;
  let currentSearchTerm = "";

  function getCurrentURL() {
    const currentURL = window.location.href,
      url = new URL(currentURL);

    return `${url.origin}/blog`;
  }

  async function getToken() {
    return {
      token:
        "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJKV1QiLCJzdWIiOjQsImlhdCI6MTY4ODA1MjgzNSwiZXhwIjpudWxsfQ.cZnMqjHIPpwdaGSGsGQ3Doa1nfG_lEy2r2k-32NiAw4",
    };
  }

  async function getAPICall(url) {
    try {
      const token = await getToken();
      const requestOptions = {
        headers: {
          "Content-Type": "application/json",
          Authorization: "Bearer " + token.token,
        },
      };

      const response = await fetch(url, requestOptions);
      const data = await response.json();
      return data;
    } catch (error) {
      return {};
    }
  }

  async function fetchPosts(params = {}) {
    const searchParams = new URLSearchParams(params);
    const url = `${API_URL}/v1/posts?${searchParams.toString()}`;
    console.log(url);
    return await getAPICall(url);
  }

  async function fetchCategories(params = {}) {
    const searchParams = new URLSearchParams(params);
    const url = `${API_URL}/v1/categories?${searchParams.toString()}`;
    return await getAPICall(url);
  }

  async function fetchPost(post_slug) {
    const url = `${API_URL}/v1/posts/${post_slug}`;
    return await getAPICall(url);
  }

  async function fetchPostsCategories(category_slug, params = {}) {
    const searchParams = new URLSearchParams(params);
    const url = `${API_URL}/v1/categories/${category_slug}/posts?${searchParams.toString()}`;
    console.log("url", url);

    return await getAPICall(url);
  }

  function getPostsHTML(posts) {
    let postsHTML = "";

    posts.forEach((post) => {
      const published = moment(post.created_at).fromNow(),
        post_image = `${BASE_URL}/${post.image}`,
        post_link = `/blog_details.html?slug=${post.slug}`;

      postsHTML += `
        <div class="col-sm-12 col-md-6 col-lg-4 py-4">
          <article class="card blog-post-card h-100">
            <img loading="lazy" class="card-img-top ratio ratio-1x1" src="${post_image}" alt="${post.title}" title="${post.title}">
            <div class="card-body">
              <h5 class="card-title text-header-4 color-primary"><a class="theme-link" href="${post_link}">${post.title}</a></h5>
              <p class="card-text text-body align-baseline">${post.excerpt}</p>
              <p class="text-white fst-italic mb-0"><a class="text-link" href="${post_link}">Read more →</a></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Published ${published}</small>
            </div>
          </article><!--//card-->
        </div>
      `;
    });

    return postsHTML;
  }

  async function getPosts() {
    const postsContainer = document.getElementById("posts");

    if (postsContainer) {
      try {
        const url_params = {
          limit: LIMIT,
          page: currentPage,
        };

        if (currentSearchTerm) url_params.search = currentSearchTerm;

        const posts = await fetchPosts(url_params);
        console.log("posts", posts);
        const data = posts.data;
        const pagination = posts?.pagination;

        if (data && data.length > 0) {
          const postsHTML = getPostsHTML(data);

          //postsContainer.innerHTML = `<div class="row gap-2 justify-content-between">${postsHTML}</div>`;
          
          postsContainer.innerHTML = postsHTML;

          createPagination(pagination);
        } else {
          const categoriesContainer = document.getElementById("categories");
          categoriesContainer.remove();

          const search_wrapper = document.querySelector(".search-wrapper");
          search_wrapper.remove();

          postsContainer.innerHTML = `<blockquote class="blockquote color-primary text-header-4 lh-sm my-5 py-5">Oops! No posts found!</blockquote>`;
        }
      } catch (error) {
        console.error("Error fetching posts:", error);
      }
    }
  }

  async function getCategories() {
    const categoriesContainer = document.getElementById("categories");

    if (categoriesContainer) {
      try {
        const url_params = {};
        
        return;
        const categories = await fetchCategories(url_params),
          data = categories.data;

        if (data?.length > 0) {
          let categoriesHTML = "";

          data.forEach((category) => {
            const category_link = category.slug;

            categoriesHTML += `<li class="nav-item" role="presentation">
              <a class="nav-link btn btn-tag btn-rounded text-white" href="${LOCAL_URL}/category/${category_link}">
                ${category.name}
              </a>
            </li>`;
          });

          categoriesContainer.innerHTML = categoriesHTML;
        } else {
          categoriesContainer.innerHTML = "<p>No categories found.</p>";
        }
      } catch (error) {
        console.error("Error fetching categories:", error);
      }
    }
  }

  async function getBlogDetails() {
    const postsContainer = document.getElementById("blog-content");

    if (postsContainer) {
      try {
        const params = new URLSearchParams(window.location.search);
        const slug = params.get("slug");

        console.log(params, slug);
        const post = await fetchPost(slug);

        if (post.data) {
          const data = post.data[0];

          const title = data.title,
            content = data.body,
            published = moment(data.created_at).fromNow(),
            post_image = `${BASE_URL}/${data.image}`,
            meta_description = data.meta_description == null || data.meta_description == "" ? "Sell2rent Sell-Leaseback Program" : data.meta_description,
            meta_keywords = data.meta_keywords == null || data.meta_keywords == "" ? "Sell2rent, Leaseback, Sell and Stay Home" : data.meta_keywords,
            seo_title = data.seo_title;
            console.log("Meta Description: " + meta_description);
            console.log("Meta Keywords: " + meta_keywords);
            console.log("SEO Title: " + seo_title);
            document.getElementById('dynamic-description').setAttribute('content', meta_description);
            document.getElementById('dynamic-keywords').setAttribute('content', meta_keywords);
          document.querySelectorAll(".blog-title").forEach(function (el) {
            el.textContent = title;
          });
          document.getElementById("blog-content").innerHTML = content;
          document.getElementById("blog-published").textContent = published;
          document.getElementById("blog-image").src = post_image;
        }
      } catch (error) {
        console.log("Error:", error);
      }
    }
  }

  function createPagination(pagination) {
    const paginationContainer = document.getElementById("pagination");

    if (paginationContainer) {
      const totalPosts = pagination?.total;
      const totalPages = Math.ceil(totalPosts / LIMIT);

      let paginationHTML = "";

      for (let i = 1; i <= totalPages; i++) {
        paginationHTML += `
            <li class="page-item ${currentPage === i ? "active" : ""}">
            ${
              currentPage === i
                ? `<span class="page-link">${i}</span>`
                : `<a class="page-link" href="?page=${i} data-page="${i}">${i}</a>`
            }
          `
        ;
      }

      paginationContainer.innerHTML = paginationHTML;
      addChangePageEvent();
    }
  }

  function addChangePageEvent() {
    const pagesLinks = Array.from(
      document.querySelectorAll(".pagination li a")
    );

    pagesLinks.forEach((el) =>
      el.addEventListener("click", (event) => {
        event.preventDefault();
        changePage(Number(el.textContent)); // Utilizamos el número del enlace como página
      })
    );
  }

  async function changePage(page) {
    currentPage = page;
    await getPosts();
    updateURLParams();
  }

  function initSearch() {
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");
    const clearSearchButton = document.getElementById("clearSearchButton");

    //if (searchInput && searchButton && clearSearchButton) {
      // Event listener for clear search button click
      if(searchButton){
        searchButton.addEventListener("click", handleSearch);
        if (clearSearchButton){
          clearSearchButton.addEventListener("click", clearSearch);
        } 
        if(searchInput){
          searchInput.addEventListener("keyup", (event) => {
            if (event.key === "Enter") {
              handleSearch();
            }
          });
        }
      }
      
      // Event listener for search button click
      // searchButton.addEventListener("click", handleSearch);

      // Event listener for Enter key press in search input
    //}
  }

  // Function to handle search
  async function handleSearch() {
    const searchInput = document.getElementById("searchInput");

    currentSearchTerm = searchInput.value.trim();
    currentPage = 1;
    await getPosts();
  }

  // Function to clear the search
  async function clearSearch() {
    console.log("clear");

    searchInput.value = "";
    currentSearchTerm = "";
    currentPage = 1;
    await getPosts();
  }

  function updateURLParams() {
    const urlSearchParams = new URLSearchParams();
    urlSearchParams.set("page", currentPage);
    const newURL = window.location.pathname + "?" + urlSearchParams.toString();
    history.pushState({}, "", newURL);
  }

  async function showData() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    const pageParam = urlSearchParams.get("page");

    if (pageParam) {
      currentPage = parseInt(pageParam, 10);
      await getPosts();
    } else {
      await Promise.all([getPosts(), getCategories()]);
    }
  }

  async function showBlogDetails() {
    await Promise.all([getBlogDetails()]);
  }

  showData();
  initSearch();
  showBlogDetails();
});
