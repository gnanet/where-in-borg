// Directory tree navigation functionality

class TreeNode {
    constructor(name) {
        this.name = name;
        this.children = []; 
    }

    addChild(child) {
        this.children.push(child);
    }
}

class Tree {
    constructor(rootName) {
        this.root = new TreeNode(rootName);
    }

    addNode(path, name) {
        const parts = path.split('/');
        let currentNode = this.root;

        for (const part of parts) {
            if (part) {
                let found = currentNode.children.find(child => child.name === part);
                if (!found) {
                    found = new TreeNode(part);
                    currentNode.addChild(found);
                }
                currentNode = found;
            }
        }

        currentNode.addChild(new TreeNode(name));
    }

    traverse(callback) {
        const traverseNode = (node) => {
            callback(node);
            node.children.forEach(traverseNode);
        };
        traverseNode(this.root);
    }
}

// Example usage
const tree = new Tree('root');

// Adding nodes to the tree

// e.g. tree.addNode('root/child1', 'subchild1');
tree.addNode('root', 'child1');
tree.addNode('root/child1', 'subchild1');
tree.addNode('root', 'child2');

tree.traverse(node => console.log(node.name));
