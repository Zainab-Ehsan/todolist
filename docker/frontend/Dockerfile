# ==============================
# Stage 1: Build Vite Assets
# ==============================
FROM node:22-alpine AS frontend-builder

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build


# ==============================
# Stage 2: Nginx
# ==============================
FROM nginx:alpine

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY public /var/www/public

# Copy Vite production build
COPY --from=frontend-builder /app/public/build /var/www/public/build

WORKDIR /var/www

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
