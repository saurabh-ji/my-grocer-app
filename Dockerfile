# Use official lightweight nginx image
FROM nginx:alpine

# Remove default nginx index.html
RUN rm /usr/share/nginx/html/index.html

# Copy the grocery app HTML file to nginx public folder
COPY grocery-app.html /usr/share/nginx/html/index.html

# Expose port 80 for web server
EXPOSE 80

# Start nginx in foreground (default CMD)
CMD ["nginx", "-g", "daemon off;"]


