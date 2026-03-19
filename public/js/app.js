// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    const searchBox = document.getElementById('search');
    const itemList = document.getElementById('item-list');
    const paginationControls = document.getElementById('pagination-controls');
    let currentPage = 1;
    const itemsPerPage = 10;
    let items = [];

    // Fetch and display items
    function fetchItems() {
        // Simulated fetch
        items = [];  // Replace with actual fetch logic
        displayItems();
    }

    // Display items with pagination
    function displayItems() {
        itemList.innerHTML = '';
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const paginatedItems = items.slice(start, end);

        paginatedItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item;
            itemList.appendChild(listItem);
        });

        updatePaginationControls();
    }

    // Update pagination controls
    function updatePaginationControls() {
        paginationControls.innerHTML = '';
        const totalPages = Math.ceil(items.length / itemsPerPage);

        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement('button');
            button.textContent = i;
            button.addEventListener('click', function() {
                currentPage = i;
                displayItems();
            });
            paginationControls.appendChild(button);
        }
    }

    // Search functionality
    searchBox.addEventListener('input', function() {
        const query = searchBox.value.toLowerCase();
        const filteredItems = items.filter(item => item.toLowerCase().includes(query));
        itemList.innerHTML = '';

        filteredItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item;
            itemList.appendChild(listItem);
        });
    });

    fetchItems(); // Initial fetch
});
